<x-app-layout>
    <div class="container"> 
        <div class="center mt-1 p-1">
            <h2>Welcome</h2>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores consequatur iste a vel placeat eveniet, autem iure fugiat ratione atque! Accusamus ad et ipsam iure quia, ab dolorum eaque facere.</span>
        </div>

        <div class="row">
            <div class="col-md-4 mt-2">
                <h4>Services</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores consequatur iste a vel placeat eveniet, autem iure fugiat ratione atque! Accusamus ad et ipsam iure quia, ab dolorum eaque facere.</span>
            </div>
            <div class="col-md-4 mt-2">
                <h4>Services</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores consequatur iste a vel placeat eveniet, autem iure fugiat ratione atque! Accusamus ad et ipsam iure quia, ab dolorum eaque facere.</span>
            </div>
            <div class="col-md-4 mt-2">
                <h4>Services</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores consequatur iste a vel placeat eveniet, autem iure fugiat ratione atque! Accusamus ad et ipsam iure quia, ab dolorum eaque facere.</span>
            </div>

        </div>

        <div class="center">
            @if(session()->has('message'))
            <div class="alert alert-success" id="alert">
                <button type="button" class="close" data-dismiss="alert" >x</button>
            {{session()->get('message')}}
            </div>
            @elseif(session()->has('message'))
            
            <div class="alert alert-warning" id="alert">
                <button type="button" class="close" data-dismiss="alert" >x</button>
            {{session()->get('message')}}
            </div>
            @endif
        </div>
            
            <div class="col-m-4 p-1 mb-2">
                <a class="btn btn-success w-300" href="{{ route('booking')}}">Book</a>
            </div>
        
    </div>
   
</x-app-layout>
