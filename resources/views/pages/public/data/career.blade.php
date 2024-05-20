@foreach ($carers as $key => $career)
    @php
        $data = json_decode($career->content, true);
    @endphp
       <div class="acd-group">
        <a href="#" class="acd-heading"><span class="ti-desktop text-blue"></span> {{ $career->title }}</a>
        <div class="acd-des">
            <div class="row">
                <div class="col-md-12 text-left">
                    <p class="mb-2">Deskripsi Pekerjaan :</p>
                    <p class="mb-2">{{ $data['description'] ?? '' }}</p>
                    <p class="mb-2">Kualifikasi :</p>
                    {!! $data['kualifikasi'] ?? '' !!}
                    <p class="mb-2">{{ $data['contact'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach
