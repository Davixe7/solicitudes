<template>
    <div id="solicitudes">
        <div>
            <table class="table table-sm">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CUI</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <tr v-for="solicitude in solicitudes">
                        <td>
                            {{ solicitude.primer_nombre }}
                        </td>
                        <td>
                            {{ solicitude.primer_apellido }}
                        </td>
                        <td>
                            {{ solicitude.primer_cui }}
                        </td>
                        <td>
                            <router-link :to="`solicitudes/${ solicitude.id }`">Ver</router-link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
const solicitudes = ref([])

onMounted(()=>{
    axios.get('solicitudes')
    .then(response=>{
        solicitudes.value = response.data.data
    })
    .catch(error => {console.log(error.response)})
    .finally()
})
</script>
