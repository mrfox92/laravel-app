<?php

namespace App\VueTables;

use Carbon\Carbon;

class EloquentVueTables implements VueTablesInterface
{
    public function get( $model, array $fields, Array $relations = []) {

        //  obtenemos los datos desde la request
        $byColumn   = request('byColumn');
        $orderBy    = request('orderBy');
        $limit      = request('limit');
        $page       = request('page');
        $ascending  = request('ascending');
        $query      = json_decode( request('query'), true );    //  decodificamos el json desde la request

        //  extract(request()->only(['query', 'limit', 'page', 'orderBy', 'ascending', 'byColumn']));
        //  seleccionamos los datos desde nuestro modelo, los campos a traer de la base de datos y con las relaciones proporcionadas en el array relations
        $data = $model->select($fields)->with($relations);


        //  verificamos si el estado de la request vien en verdadero
        if (request('status')) {
            $data->where('status', request('status'));  //  si es verdadero entonces lo grabamos en base de datos
        }

        //  comprobamos si la query está definida y si no es null
        if (isset($query) && $query) {
            //  realizamos un filtro por columna
            $data = $byColumn == 1 ?
                $this->filterByColumn($data, $query) :
                $this->filter($data, $query, $fields);
        }

        //  realizamos conteo del total de resultados
        $count = $data->count();

        //  definimos la cantidad de datos a mostrar por página y el indice para los resultados de la página siguiente
        $data->limit($limit)
            ->skip($limit * ($page - 1));

        //  comprobamos si ha sido inicializada orderBy, luego comprobamos su valor y definimos el orden gracias al operador ternario
        if (isset($orderBy)) {
            $direction = $ascending == 1 ? 'ASC' : 'DESC';
            $data->orderBy($orderBy, $direction);
        }

        //  convertimos los datos a un Array con el metodo toArray()
        $results = $data->get()->toArray();

        //  retornamos la respuesta con la data y el contador
        return [
            'data' => $results,
            'count' => $count,
        ];
    }

    protected function filterByColumn($data, $queries)
    {
        return $data->where(function ($q) use ($queries) {
            foreach ($queries as $field => $query) {
                if (is_string($query)) {
                    $q->where($field, 'LIKE', "%{$query}%");
                } else {
                    $start = Carbon::createFromFormat('d-m-Y', $query['start'])->startOfDay();
                    $end = Carbon::createFromFormat('d-m-Y', $query['end'])->endOfDay();

                    $q->whereBetween($field, [$start, $end]);
                }
            }
        });
    }

    protected function filter($data, $query, $fields)
    {
        return $data->where(function ($q) use ($query, $fields) {
            foreach ($fields as $index => $field) {
                $method = $index ? 'orWhere' : 'where';
                $q->{$method}($field, 'LIKE', "%{$query}%");
            }
        });
    }
}