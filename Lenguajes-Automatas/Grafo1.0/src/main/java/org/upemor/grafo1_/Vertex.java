package org.upemor.grafo1_;

//Lombook, te permite insertar código

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
public class Vertex<T> {
    private String label;
    private T value;
    private List<Vertex<T>> edges;

    public Vertex(String label, T value){
        this.label = label;
        this.value = value;
    }

    public String toString(){
        return "[" + label + "] -> " + value;
    }
}
