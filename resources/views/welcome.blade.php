@extends ('layout')

@section ('content')
    <div style="text-align: center;">
    <h1>Miss Drew Baxter</h1>
    <img src="{{ url('images/drew.jpg') }}" alt="Drew">
    <h2>🎓 Education</h2>
    <p>
        <b>▸</b> Studying for MSc Computer Science with Cyber Security at University of York<br/>
        <b>▸</b> BSc Mathematics First-class Honours from Newcastle University<br />
        <b>▸</b> A Levels in Mathematics, Further Mathematics, and Physics<br />
    </p>
    <h2>💻 Employment</h2>
    <p>
        <b>▸</b> IT Manager since October 2021 at Redu Group<br/>
        <b>▸</b> System Support Executive for 11 months at Redu Group<br/>
        <b>▸</b> Sales Order Processor for 10 Years 3 Months at Redu Group
    </p>
    <h2>🏆 Certifications</h2><br/>
        <div style="background-color: #FFFFFF; width: 100%;">
    <a href="https://www.credly.com/badges/99749170-3cdd-4b4c-93bd-7af85fd521d6/public_url" target="_blank"><img src="{{ url('images/comptia-a-ce-certification.png') }}" alt="A+"></a>
    <a href="https://www.credly.com/badges/434150f6-a0ec-405b-8edf-38a9fe15dae4/public_url" target="_blank"><img src="{{ url('images/comptia-security-ce-certification.png') }}" alt="Security+"></a>
    <a href="https://www.credly.com/badges/15a6a67e-f6ed-497a-8f6a-9b2dc799f522/public_url" target="_blank"><img src="{{ url('images/itil-4-foundation-cpd.png') }}" alt="ITIL 4 Foundation"></a>
    <a href="https://www.credly.com/badges/48b552ac-2833-4210-8eb3-f0e318729fe4/public_urll" target="_blank"><img src="{{ url('images/google-it-support-certificate.png') }}" alt="Google IT Support"></a>
        </div>
@endsection
