@if (!empty($categoryInformation)) {{-- Select in update category --}}
    @if ($childCategory->id !== $categoryInformation->id)
        <option value="{{ $childCategory->id }}" @if ($childCategory->id === $categoryInformation->parent_id) {{ 'selected' }} @endif>
            @for($i = 0; $i < $dash; $i++) {{ '|----' }} @endfor{{ $childCategory->name }}
        </option>
        @if ($childCategory->categories)
            @foreach ($childCategory->categories as $childCategory)
                @include('backend.categories.block.child_category_select', ['dash' => $dash + 1])
            @endforeach
        @endif
    @endif
@elseif (!empty($productCategory)) {{-- Select in update product --}}
    <option value="{{ $childCategory->id }}" @if ($childCategory->id === $productCategory) {{ 'selected' }} @endif>
        @for($i = 0; $i < $dash; $i++) {{ '|----' }} @endfor{{ $childCategory->name }}
    </option>
    @if ($childCategory->categories)
        @foreach ($childCategory->categories as $childCategory)
            @include('backend.categories.block.child_category_select', ['dash' => $dash + 1])
        @endforeach
    @endif
@else
    <option value="{{ $childCategory->id }}"> {{-- Select in add category --}}
        @for($i = 0; $i < $dash; $i++) {{ '|----' }} @endfor{{ $childCategory->name }}
    </option>
    @if ($childCategory->categories)
        @foreach ($childCategory->categories as $childCategory)
            @include('backend.categories.block.child_category_select', ['dash' => $dash + 1])
        @endforeach
    @endif
@endif
