@extends ('layout')
@section ('content')
<meta name="robots" content="noindex" />
<h2>Endpoint Manager - Firewall</h2>
To add exceptions: devices - Windows - configuration profiles - firewall profile should have firewall rules on configuration settings.
<h2>Powershell - Update Document Dates</h2>
(Get-Item "filename").CreationTime=("17 August 2022 11:09:00")<br/>
(Get-Item "filename").LastWriteTime=("17 August 2022 11:09:00")
@endsection
