<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateClienteRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Client::paginate(5);
        return view('Admin.Clients.index',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Admin.Clients.create',['client'=> new Client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreUpdateClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateClienteRequest  $request)
    {
        $client = $request->all();
        if($request->hasFile('image') && $request->image->isValid())
        {
            $imagePath = $request->image->store('clients');
            $data['image'] = $imagePath;
        }
        Client::create($client);
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('Admin.Clients.detalhes',['client'=> $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('Admin.Clients.Edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreUpdateClienteRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateClienteRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
    public function search(Request $request, Client $client)
    {
        $filter = $request->all();
       $clientes = $client->search($request->filter);
       return view('Admin.Clients.index',['clientes'=>$clientes,'filter'=>$filter]);
    }
}
