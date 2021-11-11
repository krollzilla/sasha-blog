<div class="my-8 space--10">
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>

        <p><livewire:comment-create :post_id="$post->id" :post_slug="$post->slug" /></p>


            @foreach ($post->comments->sortDesc() as $comment)
        <div class="flex">
            <img class="h-10 w-10 rounded-full" src="https://www.pngitem.com/pimgs/m/421-4212341_default-avatar-svg-hd-png-download.png" alt="avatar">
            <div class="ml-4">
                <div class="flex items-center">
                    <div class="font-semibold">{{ $users->name ?? 'Guest' }}</div>
                    <div class="text-gray-500 ml-2">{{ $comment->created_at->diffForHumans() }}</div>
                </div>
                <div class="text-gray-700 mt-2">{{ $comment->content }}</div>
            </div>
        </div>
@endforeach
</div>
</div>








<
