<h4> Share with us your favorite Quotes </h4>
<div class="row">
    <form action="{{route('ideas.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <textarea name="ideas" class="form-control" id="idea" rows="3"></textarea>
        @error('idea')
        @include('shared.error-message')
        @enderror
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>
