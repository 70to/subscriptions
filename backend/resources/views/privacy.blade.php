@extends('layouts.app')

@section('content-header')
    <div class="relative bg-white overflow-hidden">
        <div class="relative px-4">
            <p class="text-base text-center leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Privacy
                Policy</p>
            <h1 class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                プライバシーポリシー</h1>
            <div class="prose prose-lg text-gray-500 mx-auto">
                <p>
                    当サイトではサイトの機能として、設定画面からメールアドレスを登録することでメール通知機能をご利用できます（任意）。メールアドレス以外の個人情報（本名、電話番号など）を取得する事はありません。
                </p>
                <p>当サイトではサイトの機能として以下の情報をTwitterから取得しております。</p>
                <ul>
                    <li>ユーザー名</li>
                    <li>Twitter投稿に必要なトークン</li>
                </ul>
                <p>個人を特定できない情報に関してはサイトの開発に必要な情報を取得する目的でアクセス解析ツールやヒートマップツールなどの外部の開発用ツールを利用する可能性があります</p>
            </div>
        </div>
    </div>
@endsection
