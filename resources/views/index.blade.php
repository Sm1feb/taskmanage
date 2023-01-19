@extends('layout')

@section('main-content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<div>
<div class="float-start">
<h4 class="pb-3">My Tasks</h4>
</div>

<div class="float-end">
<a href="{{ route('task.create') }}" class="btn btn-info">
    Create Task
</a>
</div>
<div class="clearfix"></div>
</div>
@if(count($tasks) === 0)
<center><div class="alert alert-danger p-2" style="width:500px;text-align:center;">
  No Task Found. Please Create One task 
  <br>
  <br>
  <a href="{{ route('task.create') }}" class="btn btn-info">
Create Task
</a>


</div></center>
@endif
@foreach($tasks as $task)

        <div class="card">
          <h5 class="card-header">
          @if($task->status == "Todo")
               {{$task->title}}
          @else
             <del>{{$task->title}}</del>
          @endif
         


      
            <span class="badge bg-warning text-dark">
              {{ $task->created_at->diffForHumans()}}
            </span>


          @if($task->status == "Todo")
              User-> {{$task->name}}
              <a href="{{url('view/'.$task->id)}}" class="btn btn-info">
                View
              </a>
          @else
             <del>{{$task->name}}</del>
          @endif
         


      
           
</h5>

          <div class="card-body">
            <div class="card-text">
            <div class="float-start">
            @if($task->status == "Todo")
               {{$task->description}}
          @else
             <del>{{$task->description}}</del>
          @endif

      
           <br>
          @if($task->status == "Todo")
          <span class="badge bg-info text-dark">Todo</span>
          @else
          <span class="badge bg-success text-white">Done</span>
          @endif
          
           <small>Last Updated - {{ $task->updated_at->diffForHumans()}}</small>
</div>

            <div class="float-end">
           
            <a href="{{ route('task.edit',$task->id) }}" class="btn btn-success">
                    Edit 
             </a>
    <form action="{{route('task.destroy',$task->id)}}" style="display:inline" method="post">
               @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger" style="background-color:red;">
                 Delete 
          </button>
    </form>

</div>
<div class="clearfix"></div>

            
            </div>
          </div>
        </div>
        @endforeach
        <div class="flex mx-auto items-center justify-center shadow-lg mt-20 mx-8 mb-4 max-w-5xl">
         <script src="https://cdn.tailwindcss.com"></script>

         <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2" action="{{url('comment2/.$findrec[0]->id')}}" method="post">
             {{csrf_field()}}
            <div class="flex flex-wrap -mx-3 mb-6">
               <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                  <div class="w-full md:w-full px-3 mb-2 mt-2">
                  <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="comment" placeholder='Type Your Comment' required></textarea>
                  <input type="hidden" name="post" value="{{Auth::user()->id}}">
                  <input type="hidden" name="name" value="{{Auth::user()->name}}">
                  <input type="hidden" name="user" value="{{isset($findrec[0]->id) ? $findrec[0]->id:""}}">
            </div>
            {{-- echo "{{Auth::user()->name}}"; --}}
            <div class="w-full md:w-full flex items-start md:w-full px-3">
               <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                  <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                     <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
               </div>
               <div class="-mr-1">
                     <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
               </div>
            </div>
         </form>
      </div>  
   </div>

            @if(isset($cmnts))  
        @foreach($cmnts as $row)

       
             <div class="min-h-screen bg-gray-110 flex items-center justify-center">
               <div class="px-10">
                  <script src="https://cdn.tailwindcss.com"></script>
                 <div class="bg-white max-w-xl rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                   <div class="w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center font-bold text-white">LOGO</div>
                   <div class="mt-4">
                     <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">Product Review</h1>
                     <div class="flex mt-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                         <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                       </svg>
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                         <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                       </svg>
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                         <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                       </svg>
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                         <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                       </svg>
                     </div>
                     <p class="mt-4 text-md text-gray-600">{{ $row->comment }}</p>
                    {{-- print_r($row); --}}
                     <div class="flex justify-between items-center">
                       <div class="mt-4 flex items-center space-x-4 py-6">
                         <div class="">
                           <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1036&q=80" alt="" />
                         </div>
                         <div class="text-sm font-semibold">User: {{ $row->user }}</div>

                           <span class="font-normal">{{ $row->created_at }}</span>
                       </div>
                       <div class="p-6 bg-yellow-400 rounded-full h-4 w-4 flex items-center justify-center text-2xl text-white mt-4 shadow-lg cursor-pointer">+</div>
                       <div class=""><a href="{{url('comment4/'.$row->id)}}"><i class='fas fa-trash-alt'  style="margin-left:24px;margin-top:98px;height:10px;font-size:24px;"></i></a></div>
                  
                      </div>
                   </div>
                 </div>
               </div>
             </div>
         </div>
      
       @endforeach 
         @endif
       
@endsection

<!-- comment form -->
<!-- <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">
   <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
      <div class="flex flex-wrap -mx-3 mb-6">
      <script src="https://cdn.tailwindcss.com"></script>   
      <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
         <form action="{{url('comment/.$findrec[0]->id')}}" method="post" style="margin-top:69px;">	
                    {{csrf_field()}}
         <div class="w-full md:w-full px-3 mb-2 mt-2">
            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="comment" placeholder='Type Your Comment' required></textarea>
            <input type="hidden" name="post" value="{{Auth::user()->id}}">
          </div>
         <div class="w-full md:w-full flex items-start md:w-full px-3">
            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
               <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
               </svg>
               <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
            </div>
</form>
            <div class="-mr-1">
               <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
            </div>
         </div>
      </form>
   </div>
</div> -->