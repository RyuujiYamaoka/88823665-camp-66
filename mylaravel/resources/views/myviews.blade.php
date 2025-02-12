<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    body {
        color: white;
        justify-content: center;
        align-items: center;
        text-shadow: 8px 8px 10px #0000008c;
        background-color: #343a40;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%239C92AC' fill-opacity='0.25' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"), linear-gradient(to right top, #343a40, #2b2c31, #211f22, #151314, #000000);
    }

    .list-group-item {
        width: 50%;
    }

    .list-group{
        align-items: center;
    }
</style>

<body class="container mt-4">
    <div class="text-center mb-3">
        <h1>สูตรคูณแม่ {{ $number; }}</h1>
    </div>

    <form method="post" action="{{ url('/Mycontroller') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">กรอกตัวเลขสูตรคูณที่ต้องการค้นหา</label>
            <input name="number" type="number" class="form-control" id="exampleFormControlInput1" placeholder="1 - ....">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>


    <div class="mt-4">
        <h2 class="text-center">Multiplication Table for {{ $number; }}</h2>
        <ul class="list-group">
            @foreach ($multiplicationTable as $row)
            <li class="list-group-item text-center">{{ $row }}</li>
            @endforeach
        </ul>
    </div>

</body>
