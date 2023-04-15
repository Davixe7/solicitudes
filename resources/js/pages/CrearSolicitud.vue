<template>
    <div class="card">
        <div class="card-header">
            Registrar solicitud
        </div>
        <div class="card-body">
            <form @submit.prevent="storeSolicitude" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento"
                                v-model="solicitude.fecha_nacimiento"  required/>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select id="sexo" class="form-select" v-model="solicitude.sexo" required>
                                <option selected>Seleccione una opción</option>
                                <option value="1">M</option>
                                <option value="2">F</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="estado_civil" class="form-label">Estado civil</label>
                            <select id="estado_civil" class="form-select" v-model="solicitude.estado_civil" required>
                                <option selected>Seleccione una opción</option>
                                <option value="1">Soltero</option>
                                <option value="2">Casado</option>
                                <option value="3">Divorciado</option>
                                <option value="4">Viudo</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="primer_nombre" class="form-label">Primer nombre</label>
                            <input type="text" class="form-control" id="primer_nombre" v-model="solicitude.primer_nombre" required>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="segundo_nombre" class="form-label">Segundo nombre</label>
                            <input type="text" class="form-control" id="segundo_nombre" v-model="solicitude.segundo_nombre">
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="primer_apellido" class="form-label">Primer apellido</label>
                            <input type="text" class="form-control" id="primer_apellido"
                                v-model="solicitude.primer_apellido" required>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                            <input type="text" class="form-control" id="segundo_apellido"
                                v-model="solicitude.segundo_apellido">
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="telefono" class="form-label">Número telefónico trabajador</label>
                            <input type="tel" class="form-control" id="telefono" v-model="solicitude.telefono" required>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="email" class="form-label">Correo electrónico trabajador</label>
                            <input type="email" class="form-control" id="email" v-model="solicitude.email" required>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="email_confirmation" class="form-label">Confirmar correo trabajador</label>
                            <input type="email" class="form-control" id="email_confirmation"
                                v-model="solicitude.email_confirmation" required>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" v-model="solicitude.direccion" required>
                            <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="tipo_documento" class="form-label">Tipo documento</label>
                            <select id="tipo_documento" class="form-select" aria-label="Default select example"
                                v-model="solicitude.tipo_documento" required>
                                <option selected>Seleccione una opción</option>
                                <option value="1">Nacional</option>
                                <option value="2">Extranjero</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="cui" class="form-label">CUI</label>
                            <input type="text" v-model="solicitude.cui" required class="form-control">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="cui" class="form-label">DPI</label>
                            <input type="file" ref="attachmentInput" class="form-control">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="departamento" class="form-label">Departamento</label>
                            <select id="departamento" class="form-select" required>
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="municipio" class="form-label">Municipio</label>
                            <select id="municipio" class="form-select" required>
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-flex ms-auto">
                            <button class="btn btn-primary ms-auto" type="submit">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const attachmentInput = ref(null)
const solicitude = ref(
    {
        primer_nombre: '',
        segundo_nombre: '',
        primer_apellido: '',
        segundo_apellido: '',
        apellido_casada: '',
        tipo_documento: '',
        pasaporte: '',
        cui: '',
        fecha_nacimiento: '',
        telefono: '',
        email: '',
        sexo: '',
        estado_civil: '',
        direccion: '',
    }
)

function storeSolicitude() {
    const data = new FormData()
    const values = { ...solicitude.value }
    Object.keys(solicitude.value)
    .forEach(key => {
        data.append(key, values[key])
    })

    if (attachmentInput && attachmentInput.value && attachmentInput.value.files.length) {
        data.append('attachment', attachmentInput.value.files[0])
    }

    axios.post('solicitudes', data)
        .then(response => { console.log(response.data.data) })
        .catch(error => console.log(error.response.data))
}
</script>
