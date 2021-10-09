<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Img') }}</th>
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name_tm }}</td>
                <td>{{ $product->name_en }}</td>
                <td>{{ $product->name_ru }}</td>
                <td>
                    @if($product->img)
                        @foreach($product->img as $image)
                            <img src="{{ asset($image) }}" alt="{{ $image }}" width="30px">
                            @break
                        @endforeach
                    @endif
                </td>
                <td>
                    <a href="{{ route(Request::segment(4) . '.show', [ app()->getlocale(), $product->parent ? $product->parent->id : $product->id ] ) }}" class="{{ $product->parent ? 'text-warning' : 'text-primary' }}">
                        {{ $product->parent ? $product->parent->{ 'name_' . app()->getlocale() } : __('Parent product') }}
                    </a>
                </td>
                <td>@include('admin-panel.product.product-action', [ $product ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $products->links('layouts.pagination') }}
        </div>
    </div>                                
</div>