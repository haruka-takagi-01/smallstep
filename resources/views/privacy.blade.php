@extends('layouts.app')
 
@section('title', '個人情報保護方針')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')
<div class="container">
    <div class="col-12 p-3">
        <h3 class="mb-3">■個人情報保護方針</h3>
        <div class="row">
            <h5 class="mb-3">当サイトでは事業運営上多くのお客様や従業者の個人情報を取扱うこととなるため、
            倫理綱領に基づいて本方針を定め、個人情報管理体制を確立し、責任ある対応を実現するものとします。</h5>
            <div class="list-group">
                <p class="list-group-item list-group-item-light">方針1. 個人情報の利用の目的をできる限り特定し、当該目的の達成に必要な範囲内で適切に取扱います。
                また、目的外利用を行なわないための措置を講じます。</p>
                <p class="list-group-item list-group-item-light">方針2. 個人情報は、適法かつ適正な方法で取得します。</p>
                <p class="list-group-item list-group-item-light">方針3. 個人情報は、本人の同意なく第三者に提供しません。</p>
                <p class="list-group-item list-group-item-light">方針4. 個人情報の管理にあたっては、漏洩・滅失・毀損の防止及び是正、その他の安全管理のために必要かつ適切な措置を講じるよう努めます。</p>
                <p class="list-group-item list-group-item-light">方針5. 個人情報の取扱いにあたっては、その情報を提供した本人が適切に関与し得るよう努め、可能な限り正確かつ最新の内容に保つよう努力します。</p>
                <p class="list-group-item list-group-item-light">方針6. 個人情報保護に関する法令を遵守し、また個人情報保護に関する社内規程を定め、継続的な見直しを行い遵守します。</p>
                <p class="list-group-item list-group-item-light">方針7. 個人情報保護に関する苦情及び相談に対応する窓口を設けて、適切に対応するよう努めます。</p>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
 
@include('commons.footer')
