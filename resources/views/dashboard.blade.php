<x-app-layout>
    <div class="container"> 
        <div class="row">
            @if(session()->has('message'))
            <div class="alert alert-success" id="alert">
                <button type="button" class="close" data-dismiss="alert" >x</button>
            {{session()->get('message')}}
            </div>
            @endif
        </div>
        <div class="row d-flex">
            <div class="row">
                <div class="col-md-4">
                   <h2>Lara</h2> 
                   <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sed quos aut suscipit, facilis neque quis eum placeat esse veniam reprehenderit ducimus. Iure cumque optio accusamus quae fuga adipisci numquam.</span>
                </div>
                <div class="col-md-4">
                    <h2>HTML</h2> 
                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sed quos aut suscipit, facilis neque quis eum placeat esse veniam reprehenderit ducimus. Iure cumque optio accusamus quae fuga adipisci numquam.</span> 
                </div>
                <div class="col-md-4">
                    <h2>PHP</h2> 
                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sed quos aut suscipit, facilis neque quis eum placeat esse veniam reprehenderit ducimus. Iure cumque optio accusamus quae fuga adipisci numquam.</span> 
                </div>
            </div>
        </div>
        
            <div class="">
                <a class="btn btn-success w-10 mt-3" href="{{ route('customers')}}">Customers</a>
            </div>
        
    </div>
   
</x-app-layout>
