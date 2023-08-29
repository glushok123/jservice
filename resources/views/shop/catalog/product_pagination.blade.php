<div class="pagination" pagination>
    <div class='row text-center'>
        @if ($products->hasPages())
            {{ $products->links("pagination::bootstrap-4") }}
        @endif
    </div>
</div>