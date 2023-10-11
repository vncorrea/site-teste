<x-base-layout>
    @section('content')
        <div class="py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <DetalhesLivros :livro="{{$livro}}"></DetalhesLivros>
                </div>
            </div>
        </div>
    @endsection
</x-base-layout>
