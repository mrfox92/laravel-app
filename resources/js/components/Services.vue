<template>
    <div>
        <div class="alert alert-warning text-center" v-if="processing"><i class="fa fa-spinner fa-2x"></i> Procesando petición...</div>
        
        <!-- las referencias son útiles para luego acceder a un componente con this.ref -->
        <v-server-table ref="table" :columns="columns" :url="url" :options="options">

            <div slot="activate_deactivate" slot-scope="props">
                <button
                    v-if="parseInt( props.row.status ) === 1"
                    type="button"
                    class="btn btn-danger btn-block"
                    @click="updateStatus(props.row, 3)"
                >
                    <i class="fa fa-ban"> {{ labels.reject }}</i>
                </button>

                <button
                    v-else
                    type="button"
                    class="btn btn-success btn-block"
                    @click="updateStatus(props.row, 1)"
                >
                <i class="fa fa-rocket"> {{ labels.approve }}</i>
                </button>
            </div>
            <!-- llamamos a nuestra funcion formattedStatus y le pasamos los valores de la fila status para dar un formato valido -->
            <div slot="status" slot-scope="props">
                <span class="badge badge-primary"
                    v-if="parseInt( props.row.status ) === 1"
                >
                    {{ formattedStatus(props.row.status) }}
                </span>
                <span class="badge badge-warning"
                    v-if="parseInt( props.row.status ) === 2"
                >
                    {{ formattedStatus(props.row.status) }}
                </span>
                <span class="badge badge-danger"
                    v-if="parseInt( props.row.status ) === 3"
                >
                    {{ formattedStatus(props.row.status) }}
                </span>
                <!-- {{ formattedStatus(props.row.status) }} -->
            </div>
            <!-- cuando el filtro cambie llamamos a filterByStatus() -->
            <!-- todo lo que comienza con underscore -->
            <div slot="filter__status" @change="filterByStatus">
                <!-- el filtro actualizará los datos y mostrará solo los que tengan el status seleccionado -->
                <select class="form-control" v-model="status">
                    <option selected value="0">Selecciona una opción</option>
                    <option value="1">Publicado</option>
                    <option value="2">Pendiente</option>
                    <option value="3">Rechazado</option>
                </select>
            </div>
        </v-server-table>
    </div>
</template>

<script>
import {Event} from 'vue-tables-2';
export default {
    name: "services",
    props: {
        labels: {
            type: Object,
            required: true
        },
        route: {
            type: String,
            required: true
        }
    },
    data () {
        return {
            processing: false,
            status: null,
            url: this.route,
            columns: ['id', 'name', 'description', 'status', 'activate_deactivate'],
            options: {
                filterByColumn: true,
                perPage: 10,
                perPageValues: [10, 25, 50],
                headings: {
                    id: 'ID',
                    name: this.labels.name,
                    description: this.labels.description,
                    status: this.labels.status,
                    activate_deactivate: this.labels.activate_deactivate,
                    approve: this.labels.approve,
                    reject: this.labels.reject
                },
                customFilters: ['status'],
                sortable: ['id', 'name', 'status'],
                filterable: ['name'],
                requestFunction: function (data) {
                    return window.axios.get(this.url, { params: data })
                        .catch( function (e) {
                            this.dispatch('error', e);
                        }
                        .bind(this));
                }
            }
        }
    },
    methods: {
        filterByStatus () {
            parseInt( this.status ) !== 0 ? Event.$emit('vue-tables.filter::status',  this.status) : null;
        },
        formattedStatus (status) {
            const statues = [
                null, 'Publicado', 'Pendiente', 'Rechazado'
            ];

            return statues[status]; //  retornamos el valor del estado actual
        },
        updateStatus (row, newStatus) {
            this.processing = true;
            setTimeout( () => {
                this.$http.post(
                    '/admin/services/updateStatus',
                    { serviceId: row.id, newStatus },
                    {
                        headers: {
                            'x-csrf-token': document.head.querySelector('meta[name=csrf-token]').content
                        }
                    }
                ).then( response => {
                    this.$refs.table.refresh();
                    console.log( response );
                })
                .catch( error => console.log(error) )
                .finally( () => {
                    this.processing = false;
                    console.log('terminada petición actualizar estado servicio');
                })

            }, 1500);
        }
    }
}
</script>

<style>
    .table-bordered>thead>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tbody>tr>td {
        text-align: center !important;
    }
</style>