<tr>
    <td class="font-weight-bold text-center">{{ $childCategory->id }}</td>
    <td class="font-weight-bold text-center">{{ $childCategory->parent_id }}</td>
    <td>@for($i = 0; $i < $dash; $i++) {{ '|----' }} @endfor{{ $childCategory->name }}</td>
    <td class="">{{ $childCategory->description }}</td>
    <td><a class="btn btn-primary" href="{{ route('admin.category.edit', ['id' => $childCategory]) }}">Sửa</a></td>
    <td>
        <form action="{{ route('admin.category.destroy', ['id' => $childCategory->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>
        </form>
    </td>
</tr>
@if ($childCategory->categories)
    @foreach ($childCategory->categories as $childCategory)
        @include('backend.categories.block.child_category_table', ['dash' => $dash + 1])
    @endforeach
@endif
