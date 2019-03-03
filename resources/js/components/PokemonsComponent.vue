	<template>


<div  style="margin-top: 20px" class="row">


			
			
			
				<div class="col-sm" style="margin: 20px" align="center" v-for="pokemon in pokemons">

						<div class="card text-center" style="width: 18rem;">

							  		<div class="card-body" align="center">


							  			<img style="height: 100px; width: 100px; margin: 20px" src="" class="card-img-top rounded-circle" alt="image" align="center">

								    	<h5 class="card-title" align="center">{{pokemon.name}}</h5>

								    	<p class="card-text" align="center">{{pokemon.element}}</p>

								    	<a href="./trainer/" 
								    	class="btn btn-primary btn-sm">Ver Detalles</a> 

								    	<a href="./trainer//edit" 
								    	class="btn btn-outline-secondary btn-sm">Editar</a>

								    	
							  		</div>
							</div>

				</div>



		
		

		
			</div>


	</template>

<script>
    export default {
    	data(){


    		return {

    			  pokemons:[

    			  {id: 1,name:"Pikachu",element: "Electric"},
    			  {id: 2,name:"Squirtel",element: "Guater"},
    			  {id: 3,name:"Charizal",element: "Fire"}
    			  
    			  ]
    		}
    	},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>