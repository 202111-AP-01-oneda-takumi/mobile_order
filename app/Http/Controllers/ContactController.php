<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts','request'));
    }

    public function confirm(Request $request)
    {
        $request->session()->put('request', $request->all());

        $this->valid($request);

        $inputs = $request->all();

        return view('contact.confirm', [
            'inputs' => $inputs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contact = new Contact;

        $contact->name = e($request['name']);
        $contact->kana = e($request['kana']);
        $contact->tel = e($request['tel']);
        $contact->email = e($request['email']);
        $contact->body = e($request['body']);
        $contact->timestamps = false;

        $contact->save();

        // 二重送信防止
        $request->session()->regenerateToken();

        return view('contact.complete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('contact/edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $this->valid($request);

        $contact->name = e($request['name']);
        $contact->kana = e($request['kana']);
        $contact->tel = e($request['tel']);
        $contact->email = e($request['email']);
        $contact->body = e($request['body']);
        $contact->timestamps = false;

        $contact->save();

        // 二重送信防止
        $request->session()->regenerateToken();

        return view('contact.edit_complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        return view('contact.delete');
    }

    public function valid($request){
        // バリデーションルール
        $validateRules = [
            'name' => 'required|max:10',
            'kana' => 'required|max:10',
            'tel' => 'nullable|numeric',
            'email' => 'email',
            'body' => 'required'
        ];

        // バリデーションメッセージの日本語化
        $validateMessages = [
            "name.required" => "氏名は必須入力です。",
            "kana.required" => "フリガナは必須入力です。",
            "body.required" => "お問い合わせ内容は必須入力です。",
            "name.max" => "10文字以内でご入力ください。",
            "kana.max" => "10文字以内でご入力ください。",
            "email" => "メールアドレスは正しくご入力ください。",
            "numeric" => "0-9の数字のみでご入力ください。"
        ];

        //バリデーションをインスタンス化
        $this->validate($request, $validateRules, $validateMessages);
    }
}
