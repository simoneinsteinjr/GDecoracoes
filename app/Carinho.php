<?php

namespace App;


class Carinho
{
    public $items = null;
    public $quantidadeTotal = 0;
    public $precoTotal = 0;

    public function __construct($carinhoAntigo)
    {
        if($carinhoAntigo){
            $this->items = $carinhoAntigo->items;
            $this->quantidadeTotal = $carinhoAntigo->quantidadeTotal;
            $this->precoTotal = $carinhoAntigo->precoTotal;
        }
    }

    public function adicionar($item, $id){
        $itemGuardado = ['quantidade' => 0, 'preco' => $item->preco, 'item' => $item];
        if ($this->items){
            if (array_key_exists($id, $this->items)){
                $itemGuardado = $this->items[$id];
            }
        }
        $itemGuardado['quantidade']++;
        $itemGuardado['preco'] = $item->preco * $itemGuardado['quantidade'];
        $this->items[$id] = $itemGuardado;
        $this->quantidadeTotal++;
        $this->precoTotal += $item->preco;
    }
}
