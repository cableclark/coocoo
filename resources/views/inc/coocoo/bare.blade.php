<div class="flex items-center">
    <img src="/images/unnamed.jpg" class="h-12 w-12 rounded-full" />
    <div class="flex ml-4">
        <a class="font-bold text-black" href="/user/{{$coocoo->user->name}}" >  {{$coocoo->user->name}} </a>   <div class="ml-4"><i>  {{$coocoo->created_at->diffForHumans()}}</i> </div>
    </div>
</div>
<div class="mt-3 mb-1 leading-normal text-lg">{{$coocoo->coocoo}} </div>



