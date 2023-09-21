<x-base-layout>
    @section('content')
        <div class="py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($livros as $livro)
                        <x-livros.listagem :livro="$livro"></x-livros.listagem>
                    @endforeach
                </div>
            </div>
    @endsection
</x-base-layout>
