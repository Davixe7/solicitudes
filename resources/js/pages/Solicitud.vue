<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Detalles de la solicitud
                </div>
                <div class="card-body" v-if="solicitude">
                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Primer nombre
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.primer_nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Segundo nombre
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.segundo_nombre }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Primer apellido
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.primer_apellido }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Segundo apellido
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.segundo_apellido }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Sexo
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.sexo }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Estado civil
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.estado_civil }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Tipo de documento
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.tipo_documento }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            CUI
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.cui }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Dirección
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.direccion }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 text-left">
                            Teléfono
                        </div>
                        <div class="col-lg-6 text-end">
                            {{ solicitude.telefono }}
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button class="btn btn-danger w-100 mr-3">Denegar</button>
                    <button class="btn btn-primary w-100">Aprobar</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6" v-if="solicitude">
            <div class="card">
                <div class="card-body" >
                    <img :src="solicitude.dpi" v-if="solicitude.dpi">
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router';

const solicitude = ref(null)
const route = useRoute()

onMounted(() => {
    axios.get(`solicitudes/${route.params.solicitude}`)
        .then(response => {
            solicitude.value = response.data.data
        })
        .catch(error => console.log(error.response))
})
</script>
