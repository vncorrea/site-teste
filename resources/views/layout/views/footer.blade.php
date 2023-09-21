@extends('layout.base')

<div class="footer">
    <footer class="bg-bs d-flex justify-content-center align-items-center py-3 border-top bottom-0 start-0">
            <span class="mb-3 mb-md-0 text-white">© {{\Carbon\Carbon::now()->format('Y')}} Bookstar, Inc</span>
    </footer>
</div>
