@include('partials.header')
<form action="{{ route('saveUpdatedTask') }}" method="POST" class="py-10">
    @csrf
    <div class="flex flex-col w-80 m-auto">
      <input type="text" name="updatetask" placeholder="Update Task" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off" value=" {{ $task->task_name }}">
      <input type="hidden" name="id" value=" {{ $task->id  }}">
      <button type="submit" class="p-2  mt-3 bg-red-600 text-white rounded hover:bg-red-800 font-bold">Update</button>
    </div>
  </form>
@include('partials.footer')