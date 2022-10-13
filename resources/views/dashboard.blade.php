<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 
<div class="flex min-h-full items-center justify-center py-12 px-8 sm:px-8 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create your post</h2>
    </div>
    <form class="mt-8 space-y-6" action="{{url('dashboard/post')}}" method="POST">
        @csrf
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="title" class="sr-only">Title</label>
          <input id="title" name="title" type="title" autocomplete="title" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="title">
        </div>
        <div class="mt-8 space-y-6">
          <label for="description" class="sr-only">Description</label>
          <textarea placeholder="Write your post" id="description" class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" name="description" id="" cols="30" rows="10"></textarea>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Post
        </button>
      </div>
    </form>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
