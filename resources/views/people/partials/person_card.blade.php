<!-- @foreach ($recent10 as $blog)
  <div class="list-group" style="margin-bottom:2em;">
    <a href="blog/id={{$blog->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{$blog->title}}</h5>
        <small>{{$blog->created_at->diffForHumans()}}</small>
      </div>
      <p class="mb-1">{{$blog->shortDescription}}</p>
      <small>By: {{$blog->user->name}}</small>
    </a>
  </div>
@endforeach -->
