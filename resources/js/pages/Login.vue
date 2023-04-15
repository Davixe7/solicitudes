<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Ingrese con sus datos
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="login()">
                            <div class="mb-3">
                                <label for="email" class="form-label">Dirección de correo electrónico</label>
                                <input type="email" class="form-control" id="email" v-model="auth.email">
                                <div id="emailHelp" class="invalid-feedback">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="email" v-model="auth.password">
                                <div id="passwordHelp" class="invalid-feedback">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router';

const router = useRouter()
const auth = ref({
    email: '',
    password: '',
})

function login(){
    axios.post('/login', auth.value)
    .then(response=>{
        console.log( response )
        if( (response.status >= 200) && (response.status < 400) ){
            router.push('/solicitudes')
        }
    })
    .catch(error=>{console.log(error.response.data)})
}
</script>
