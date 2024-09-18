package org.upemor.grafo1_;

import java.util.ArrayList;

//Lombook, te permite insertar código
//en tu código sin que sea visile

public class Grafo10 {
    public static void main(String[] args) {
        var v1 = new Vertex("Uno",1);
        var v2 = new Vertex("Dos", 2);
        var v3 = new Vertex("Tres", 3);
        var v4 = new Vertex("Cuatro", 4);
        
        v1.addAll(v3, v4, v2);
        v2.add(v4);
        v3.add(v1);
        v4.add(v3);
        
        var graph = new Graph("Grafo 1");
        graph.addAll(v1, v2, v3, v4);
        
        System.out.println(graph);
        graph.mostrarGradoVertices();
        graph.mostrarAdyacencias();
    }
}
