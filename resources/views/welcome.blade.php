<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best rating app</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <ul class="desktop-list">
        <li>
            <a href="/desktop/1">
                <img
                    src="https://lh3.googleusercontent.com/NysWMDBWZqtPEd0Xpb1cZz1XqQXKJUuA11Vtd1CdCzkSCKj_5LL7-OBqOYhu0JgNRC1ERo7sEZ8R8HXva_ptcsuqoqoASDgZabeguWHA-EVLHTXdEONhYsS0UWaT54hKpRGSUJ8XxC0a_ekGQt9Bs0zrQtGrVRj-d25lisyId-VWRU6EVbKO9YSgwwjRp7LjHKMJDwxxtCHlJPR3t4vcLukilnJewshQm156mPw7C1PO2edwfq4tEKMOOknVyFFsb1aPRv7iuLapPSygUrtBg_f98eWjIf_62STy_44FsTJxfp36W88cwAbEN9btjtl-BeHFFJqkyPU13qEsuIFTYz6Krutx-RzjWlY2c4FfLfgZqHsup4MitRa64f4IV-RmIeGOLHJbzIa0fHCLRXFayFk6pH5jVFVQP5wE6lBtiHbZBa-uyGpE0a48uEZgpI1QJMBKHJmxSY8EeZbi1BtPKkyEAjbKWXfWq3jJVn5HUzaF1-ldzRBkO9j1AVcR4NySIByTy9s9qgJuw72vhV16Z3YP--pbGpZh5Ion3akWD01btU79FkqSTnqUKWiLJAXfxKxQxBtXxfHzNZDBAH7ylS5PD2DZ7aoFEt83wFkK2AEOtaSWx52pG3pTF89jpeRSc2HY4uwUUIEHnq3ju6ufebGgUR_Nae79s_kbZu_swkeFEYyu3AKvvodTBYhfQBI=w1920-h910-no"
                    alt="">
                <footer>
                    <span>Krystian</span>
                    <span>6666</span>
                </footer>
            </a>
        </li>
        <li>
            <a href="#">
                <img
                    src="https://lh3.googleusercontent.com/q7ldcAWKZokN-ncMMRu2FIIyzbeBX1c6HK-7Q5N-qB5RBkwyXA5q1FNoZ-O9vPoFvegJepKQ8ozqYjrvk0y8uzXHOxNIFbLMYS9GSA5oSZZf026mEcJ09gqWCvaB5GEr83pui0f76wSoB51WfBARxkEPc9xjXuxnIAgWUWSmMkDcoWXxqHywEsRZl03aLg-zVGtmwGgIpYWHwZXddm3y2JJQ3iFymMZcYwxxvPE35NABLewbkfh0T_FkeV5uyiJpF949x4jdviXEuvvNfoa5ibuJEedw6h3evAyoytPpBU_gNScVPKUHU9Te47WTeHmG-5M0deQom9kTY-xrrs7rY7K4SFAlxv-o97sJwQLjHeoFwJGiBwApoYqvcgvL7akG7vH4ZMsg4GpLtLlDPUfBDE7tLLJqP5kniKRgB_0LhabouCEviJanihx5IELgw_l-5cnTrjIEZYI-QmtWgSYv7UAUdXMxkWA4YfWGWeFZ9_WolGd5cevRogaTGIta0dgAwF-pLD2BR_cnAvkIvRFyQidpQ35qUooxkh2NqnsCKdtTf_XsxgHnBSf2OfHSFs1cZ6DeJZXj1S5gMSr62UC-xl4ihTB14ybi6QTBVVCgd0Ljorob_6lCpYDI6VWBzr6l9MDQ7TvzJcblVKvUECL6Cy3hAUviiLjo_yuPFcnTHYSu3nggEw_yeJti3JyA65k=w1920-h910-no"
                    alt="">
            </a>
        </li>
        <li>
            <a href="">
                <img src="https://lh3.googleusercontent.com/gonk2nJfI1cR0BIAOvEFhVyES4n5BARtJNOCBCtu5pqYRihiutFl7l4n6AEwABktHsBWfHGOLmgVPDnYr0qTLiD-kxKe_z71pMt_7pQquowO_qVbEV8bS4vjUeAQcmzpjIMlp9M_pcPiq0cz3KvPx1FCT24M176g3DXdf9e0gkQ4DDxQJeDBq13zop5xa_DnJeuRoJK7GumfjH5JEOgt3ddE-HX4CsKIEBZGJQeQJRVLXGwiY886JJIOe7ZyndKql9EwOx5JgLDbaiwuaVhcpLJYkC9VEoULteUfCaGvS4Qlt2wpAcrucfd-DTLgzfMGcp5x6GOFdlg7IlQaOIUC1-2YVIqlV1rMpG1UyQdLBXyK8jpoJEMxf3-6FFyHxUpy2MFPBsZ-FvhsCTqNGed7aq4mwQLzaS4uklv3JqY5DLm_mTXJ12j99lv8nZitQ5VL_8yvEZ0kwzFgG2Rdn4Opge5T3xL2rwo6okCqXzuVF1T7EjSxzt9F7nVzfIbC449QJHt94h92XvzZ6aKVzYKxveHcnb9OrWU2m7toyAjzfZFSyNXk5b7Z0H9BSVHveNYog0oV6QAkewxtT2wvj_3lvlsyB5ZjGc7dUURn1ue1Ew94-2mke9waewLHSjifqIgA2ZZB3ztjWr_o-asz7V_8awKdSwRcMR5lkTDq6z42zvg7TF1xkd8Eh6UhNg-vjSU=w1920-h910-no" alt="">
            </a>
        </li>
    </ul>

</div>
</body>
</html>
