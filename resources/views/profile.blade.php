<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg">
        <h3>Best Student IBI Kesatuan Prodi TI 2024</h3>
        <div class="student-list row d-flex flex-row justify-content-evenly ">
            @foreach ($data as $mahasiswa)
                {{-- Agar responsif menggunakan row dan col --}}
                <div class="student-item card col-6 col-md-4 col-sm-8"
                    style="{{ $mahasiswa['gpa'] >= 3.8 ? 'background-color: orange' : '' }}">
                    <div class="student-frame d-flex justify-content-center card-body">
                        <div class="student-profile text-center">
                            <div class="student-image">
                                {{-- Kondisi jika gendernya laki-laki, maka gambarnya man.png --}}
                                @if ($mahasiswa['gender'] == 'Male')
                                    <img src="{{ asset('img/man.png') }}" alt="student-pic"
                                        class="card-image-top rounded-1">
                                @else
                                    <img src="{{ asset('img/woman.png') }}" alt="student-pic"
                                        class="card-image-top rounded-1">
                                @endif
                            </div>
                            <div class="student-detail">
                                <h4>{{ $mahasiswa['nama'] }}</h4>
                                <h5 class="text-secondary">{{ $mahasiswa['npm'] }}</h5>
                            </div>
                            <div
                                class="student-score p-2 d-flex flex-row justify-content-between border border-1 rounded-3 bg-body-secondary w-100">
                                <div class="gpa fw-bold">
                                    <span>{{ $mahasiswa['gpa'] }}</span>
                                    <br>
                                    <small>GPA</small>
                                </div>
                                <div class="rank fw-bold">
                                    <span>{{ $mahasiswa['rank'] }}</span>
                                    <br>
                                    <small>Rank</small>
                                </div>
                                <div class="semester fw-bold">
                                    <span>{{ $mahasiswa['semester'] }}</span>
                                    <br>
                                    <small>Semester</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
