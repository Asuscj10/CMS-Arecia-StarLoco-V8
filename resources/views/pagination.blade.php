@php
$max = 7;
@endphp
@if ($paginator->lastPage() > 1)
<ul class="page-numbers">
	@for ($i = 1; $i <= $paginator->lastPage(); $i++)
	@php
	$half = floor($max / 2);
	$from = $paginator->currentPage() - $half;
	$to = $paginator->currentPage() + $half;

	if ($paginator->currentPage() < $half)
	{
				$to += $half - $paginator->currentPage();
	}
	if ($paginator->lastPage() - $paginator->currentPage() < $half) 
	{
		$from -= $half - ($paginator->lastPage() - $paginator->currentPage()) - 1;
	}
	@endphp
	@if ($from < $i && $i < $to)
	<li>
		@if ($paginator->currentPage() == $i)
		<span class="page-numbers current">{{ $i }}</span>
		@else
		<a href="{{ $paginator->url($i) }}" class="page-numbers">{{ $i }}</a>
		@endif
	</li>
	@endif
	@endfor
</ul>
@endif