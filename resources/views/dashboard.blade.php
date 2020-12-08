<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <div class="container">
    <div class="row">
        <div class="col-md-12 well text-center">            
           <h2>Please choose below to ADD or VIEW articles:</h2>
        </div>
        <br>
        <br>
        
        <div class="col-md-6 well text-center">            
            <a href='/crud'><h1>1--> Add new article form!!</h1></a>
        </div>
        <br>
        <div class="col-md-6 well text-center">                       
            <a href='/list'><h2>2--> View all articles page!!</h2></a>
        </div>   
    </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>

























 
