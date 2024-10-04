package org.upemor.grafoponderado;

import java.util.Collections;
import java.util.LinkedList;
import java.util.List;
import lombok.Getter;
import lombok.Setter;


@Setter
@Getter
public class Vertice {
    private String nombre;
    private List<Adyacencia> adyacencias;
    private boolean Visited;
    private Etiqueta etiqueta;
    
    public Vertice(String nombre){
        this.nombre = nombre;
        this.adyacencias = new LinkedList<>();
    }
    
    public void addAdyacencias(Adyacencia... adyacencias){
        Collections.addAll(this.adyacencias, adyacencias);
    }
    
    @Override
    public String toString(){
        return nombre;
    }

    
}
