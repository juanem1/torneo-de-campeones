<?php if ($paginator->getLastPage() > 1): ?>
<div class="blogpager">
    @if ($paginator->getCurrentPage() != $paginator->getLastPage())
    <div class="previous">
    	<a href="{{ $paginator->getUrl($paginator->getCurrentPage()+1) }}">&#8592; Anteriores</a>
    </div>
    @endif

    @if ($paginator->getCurrentPage() != 1)
	<div class="next">
        <a href="{{ $paginator->getUrl($paginator->getCurrentPage()-1) }}">Nuevas &#8594;</a>
    </div>
    @endif
</div>
<?php endif; ?>


