package org.upemor.grafoponderado;

import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.Setter;


@Setter
@Getter
@AllArgsConstructor
public class Etiqueta {
    private Vertice vertice;
    private double costo;

    @Override
    public String toString() {
        return "["+vertice+","+costo+"]";
    }
    
    
    
}
