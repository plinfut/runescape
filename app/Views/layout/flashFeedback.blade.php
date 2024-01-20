@foreach (session('flash-errors', []) as $msg) <div class="flash-error"><?= $msg ?></div> @endforeach
<?php session()->forget("flash-errors") ?>
@foreach (session('flash-info', []) as $msg) <div class="flash-info"><?= $msg ?></div> @endforeach
<?php session()->forget("flash-info") ?>
@foreach (session('flash-confirmations', []) as $msg) <div class="flash-confirmation"><?= $msg ?></div> @endforeach
<?php session()->forget("flash-confirmations") ?>
