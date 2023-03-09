div class="container">
    <h1>Products</h1>
    <ul class="nav nav-tabs">
        @foreach ($products as $product)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#product-{{ $product->id }}">
                    {{ $product->name }}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach ($products as $product)
            <div id="product-{{ $product->id }}" class="tab-pane fade {{ $loop->first ? 'show active' : '' }}">
                <h2>{{ $product->name }}</h2>
                <p>ID: {{ $product->id }}</p>
                <img src="{{ asset('qrcodes/' . $product->id . '.png') }}" alt="QR code for {{ $product->name }}">
            </div>
        @endforeach
    </div>
</div>