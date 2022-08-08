<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">Eticaret &copy; 2022</div>
            
        </div>
            <a href="{{ $contact->facebook }}" class="fa-brands fa-facebook-f" style="margin: 1%"></a>
            <a href="{{ $contact->instagram }}" class="fa-brands fa-instagram" style="margin: 1%"></i>
            {{-- <a href="{{ $contact->phone }}" class="fa-solid fa-phone"></i> --}}
            <a href="mailto:{{ $contact->mail }}" class="fa-solid fa-envelope" style="margin: 1%"></i>
    </div>
</footer>
