<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach($categories as $category)
                            <li>
                                <a href="/category/{{$category['slug']}}">{{$category['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts Widget -->
    <div class="card my-4">
        <h5 class="card-header">Recent Posts</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0">
                        @foreach($recent_posts as $post)
                            <li>
                                <a href="/post/{{$post['slug']}}">{{$post['title']}}</a>
                            </li>
                            <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Links</h5>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="https://linktr.ee/TomWillGreen">More about Tom Green</a>
                </li>
            </ul>
        </div>
    </div>

</div>