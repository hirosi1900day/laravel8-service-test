<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           owner一覧
       </h2>
      </x-slot>
   <x-flash-message status="session('status')" />
   <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR TEAM</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
        </div>
        @foreach($owners as $owner)
        <div class="flex flex-wrap -m-4">
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">{{$owner->name}}</h2>
                <form id="delete_{{$owner->id}}" method="post" action={{route('admin.owners.destroy',['owner'=>$owner->id])}}>
                  @method('delete')
                  @csrf
                  <button class="bg-red-300" data-id="{{$owner->id}}" onclick="deletePost(this)")>削除</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
   
</x-app-layout>
<script>
   function deletePost(e) {
      if(confirm('本当に削除してもいいですか？')){
         document.getElementById('delete_'+e.dateset.id).submit();
      }
      
   }
</script>

