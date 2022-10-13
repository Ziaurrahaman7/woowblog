<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
        <a href="{{url('/dashboard')}}">Add New Post</a>
        </h2>
    </x-slot>
    <div class="bg-white text-center justify-center shadow">
    <table style=" width: 80%;text-align: center;" class="border  table-auto">
  <thead>
    <tr>
      <th class="border">Title</th>
      <th class="border">Post</th>
      <th class="border">Status</th>
      <th class="border">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td class="border">{{$post->title}}</td>
      <td class="border">{{$post->description}}</td>
      <td class="border">@if($post->status == 0) Unpublished @else Publish @endif</td>
      <td class="border"><a href="{{url('dashboard/post/'.$post->id.'/edit')}}">Edit</a>|<form method="post" action="{{url('dashboard/post/'.$post->id)}}">
      @csrf  
      @method('delete')
      <button class="button">Delete</button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    </x-app-layout>    