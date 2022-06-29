@extends ('layout')

@section ('content')
    <div style="text-align: center">
    <h1>Miss Drew Baxter</h1>
    <img src="{{ url('images/drew.jpg') }}" alt="Drew">
    <p>
        Hello and welcome to my website! I'm Drew and I am an IT professional living in North East England. I am interested particularly in cyber security and I am really proud that during my time at MBL Solutions I was able to work alongside an external consultant to achieve an ISO 27001 certification and a Cyber Esentials Plus certification for the business.
    </p>
    <h2>🎓 Education</h2>
    <p>
        <b>▸</b> Studying for MSc Computer Science with Cyber Security at University of York<br/>
        <b>▸</b> BSc Mathematics First-class Honours from Newcastle University<br />
        <b>▸</b> A Levels in Mathematics, Further Mathematics, and Physics, A* in Extended Project<br />
    </p>
    <h2>🏆 Active Certifications</h2><br/>
    <a href="https://www.credly.com/badges/99749170-3cdd-4b4c-93bd-7af85fd521d6/public_url" target="_blank"><img class="cert" src="{{ url('images/comptia-a-ce-certification.png') }}" alt="A+"></a>
    <a href="https://www.credly.com/badges/434150f6-a0ec-405b-8edf-38a9fe15dae4/public_url" target="_blank"><img class="cert"  src="{{ url('images/comptia-security-ce-certification.png') }}" alt="Security+"></a>
    <a href="https://www.credly.com/badges/48b552ac-2833-4210-8eb3-f0e318729fe4/public_url" target="_blank"><img class="cert"  src="{{ url('images/google-it-support-certificate.png') }}" alt="Google IT Support"></a>
    <h2> Lapsed Certifications</h2><br/>
    <a href=https://www.credly.com/badges/3c906ae1-96a3-4242-8f41-140e33ca6ba0" target="_blank"><img class="cert"  src="{{ url('images/itil-4-foundation-cpd.png') }}" alt="ITIL 4 Foundation"></a>
    </div>
@endsection
