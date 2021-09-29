@extends('layouts.main')

@section('container')
    <article class="container">
        <div class="row mx-auto justify-content-center">
            <div class="col-lg-8 col-9 my-2">
                <h3>{{ $post->title }}</h3>
                <ul class="d-flex gap-2  my-3">
                    <li>
                        <a class="btn-dark px-3 py-1 rounded-pill"
                            href="/blog/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </li>
                    <li class="text-muted">{{ $post->created_at->diffForHumans() }}</li>
                </ul>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/1000x600/?{{ $post->category->name }}" class="img-fluid">
                @endif
                <p class="mt-5">{!! $post->body !!}</p>
            </div>
        </div>
    </article>
@endsection
{{-- <p>Explicabo, incidunt? Quas labore quibusdam, vero eligendi consequuntur expedita deleniti eaque veritatis minima? Sed consequuntur eos earum accusantium placeat, officiis facilis voluptas excepturi dolorem harum aliquam distinctio, accusamus aspernatur deleniti doloribus vel nisi perspiciatis vitae corrupti culpa ut dolore. Commodi tenetur aspernatur ut voluptatem, ex sed blanditiis quod quas omnis vero atque sapiente temporibus facilis cumque maxime maiores itaque architecto. Iusto enim, cum quis, beatae aut molestiae odio corrupti error, debitis alias a nam reprehenderit officiis at. Eaque nobis dolore ex repellendus, reiciendis, dolores ipsam ad qui sequi ipsa sit, repellat sed.</p> <p>Commodi tenetur aspernatur ut voluptatem, ex sed blanditiis quod quas omnis vero atque sapiente temporibus facilis cumque maxime maiores itaque architecto. Iusto enim, cum quis, beatae aut molestiae odio corrupti error, debitis alias a nam reprehenderit officiis at. Eaque nobis dolore ex repellendus, reiciendis, dolores ipsam ad qui sequi ipsa sit, repellat sed. </p> --}}

{{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error repudiandae assumenda doloribus deleniti pariatur corrupti, omnis ipsam, tempore veritatis quae praesentium? Voluptates quibusdam aperiam praesentium repellendus, porro delectus cum eveniet impedit accusantium reiciendis id quisquam asperiores dolore? Corrupti placeat explicabo omnis quam non cumque, sed fuga iste, necessitatibus earum error quo dignissimos accusantium voluptatum. Quod beatae reprehenderit impedit, quasi tempora in eos voluptatem! Delectus impedit rerum sed necessitatibus distinctio molestiae voluptatibus nisi quo repellendus minus, in laboriosam iusto nihil fuga harum architecto inventore at. Impedit inventore omnis unde, saepe cum numquam magnam! Praesentium aperiam quod delectus unde quo saepe reprehenderit?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores id reiciendis repudiandae. In libero, cupiditate accusantium necessitatibus ipsum doloremque ab tenetur et ullam non? Eum consequuntur perspiciatis facilis placeat, tempora hic sit iste doloremque molestias illo ea ratione repellendus dolore rem temporibus, possimus perferendis. Rem veniam officiis reprehenderit! Pariatur, sunt soluta fugit reprehenderit nobis iure repudiandae perspiciatis eaque? Suscipit repellat recusandae quae rem modi minus consectetur itaque expedita illo, labore, sunt debitis vel in, placeat sequi pariatur. Mollitia, quo aperiam!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, exercitationem modi! Aspernatur, ipsam. Illum fugit ut voluptas dolores delectus, est ea accusantium dolor, soluta nam odit beatae magni harum. Ipsa nisi tempore dicta, nostrum quasi assumenda error commodi mollitia culpa?</p> --}}
