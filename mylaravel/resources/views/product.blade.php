@extends('layouts.default_with_menu')

@section('content')
<form action=" {{url('/product') }}" method="post">
    @csrf
    <div class="row mt-3">
        <div class="col-6">
            <label>Category Name</label>
            <input type="text" name="category_name" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary" id="btn-add-product-list" type="button"> + เพิ่ม Product</button>
    <div class="row mt-3" id="product-list">
        <div class="col-6">
            <label>Product Name <button type="button"
                class="btn btn-danger ml-2 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
            <input name="product_name[]" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-3">บันทึก</button>
</form>
<table class="table">
    <thead>
        <tr>
            <td>#</td>
            <td>Category Name</td>
            <td>ProductList Name</td>
            <td>User Name</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($category as $index => $category) { ?>
            <tr class="align-middle">
                <td>{{ $index + 1 }}.</td>
                <td>{{ $category->name }}</td>
                <td>
                    @foreach ($product as $index => $productItem)
                        @if ($productItem->category_id == $category->id)
                            <li>{{ $productItem->name }}</li>
                        @endif
                    @endforeach
                </td>

                <td>
                    <?php $first = true; ?>
                    @foreach ($product as $index => $productItem)
                        @if ($productItem->category_id == $category->id)
                            @foreach ($user as $index => $userItem)
                                @if ($productItem->category_id == $category->id && $productItem->user_id == $userItem->id && $first)
                                    <li>{{ $userItem->name }}</li>
                                    <?php $first = false; ?>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
@endsection


@section('scripts')
<script>
       $(document).ready(function() {
            $('#btn-add-product-list').on('click', function() {
                $('#product-list').append(`
                    <div class="col-6">
                        <label>Product Name
                            <button type="button" class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button>
                        </label>
                        <input name="product_name[]" type="text" class="form-control" required>
                    </div>
                `);
            });

            $(document).on('click', '.btn-del-product-list', function() {
                $(this).parent().parent().remove();
            });
        });
</script>
@endsection
