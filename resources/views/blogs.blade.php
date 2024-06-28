<x-layout>
  <x-slot:title>
    Blogs
  </x-slot>
  @foreach ($posts as $post)
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900">Article Theme</h2>
      <div class="text-base text-gray-500">
<!-- Suggested code may be subject to a license. Learn more: ~LicenseLog:2064827385. -->
        <h3>{{$post['name']}} | {{$post['date']}}</h3>
      </div>
      <p class="my-4 font-light">{{$post['content']}}</p>
      <a href="/blog/{{$post['id']}}" class = "font-medium text-blue-500 hover:underline"> Read More &rarr;</a>
    </article>
    @endforeach
</x-layout>
