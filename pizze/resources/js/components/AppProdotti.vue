<template>
    <div  class="container">

        <div v-if="pizze" class="div d-flex flex-wrap">
            <div v-for="(pizza,index) in pizze " :key="index" class="card my-5 mx-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{pizza.name}}</h5>
                <p class="card-text">{{pizza.description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prezzo {{pizza.price}}</li>
                <li class="list-group-item">Vegano {{pizza.is_veggie === 1?"Si": "No"}}</li>
                <li class="list-group-item">Ingredienti {{pizza.ingredients}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Compra</a>
            </div>
        </div>
        </div>

    </div>
</template>

<script>
    import axios from "axios";
    export default {
        data(){
            return{

                pizze : [],
            }
        },
        mounted() {
            axios.get("http://127.0.0.1:8000/pizzeapi-3892")
            .then(r=>{
                this.pizze = r.data
                console.log(this.pizze)
            })
            console.log()
        }
    }
</script>
