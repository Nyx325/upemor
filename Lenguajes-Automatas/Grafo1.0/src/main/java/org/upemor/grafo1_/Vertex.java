package org.upemor.grafo1_;

//Lombook, te permite insertar código

import java.util.ArrayList;
import java.util.List;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

//en tu código sin que sea visile, por 
// ejemplo los setters
@Setter // Crear setters
@Getter // Crear getters
@NoArgsConstructor // Crear constructor sin argumentos
@AllArgsConstructor // Crear constructor todos los atributos como argumentos
public class Vertex {
    private String label;
    private int value;
    private List<Vertex> edges;

    public Vertex(String label, int value){
        this.label = label;
        this.value = value;
        this.edges = new ArrayList<>();
    }
    
    public void add(Vertex v){
        edges.add(v);
    }
    
    public void addAll(Vertex... vList){
        for(Vertex v : vList){
            this.add(v);
        }
    }

    public String toString(){
        return "[" + label + "] -> " + value;
    }
}
