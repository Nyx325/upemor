package org.upemor.grafoponderado;

import java.util.Collections;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;
import java.util.Stack;
import lombok.Getter;
import lombok.Setter;

@Setter
@Getter
public class GrafoPonderado {
    private String nombre;
    private List<Vertice> vertices;

    public GrafoPonderado(String nombre) {
        this.nombre = nombre;
        this.vertices = new LinkedList<>();
    }
    
    public void addVertice(Vertice... vertices){
        Collections.addAll(this.vertices, vertices);
    }
    
    public void mostrarListaAdyacencias(){
        System.out.println("Lista de adyacencias: ");
        for(Vertice vertice:vertices){
            System.out.print(vertice+" "+vertice.getEtiqueta()+" -> {");
            for(Adyacencia adyacencia:vertice.getAdyacencias()){
                System.out.print(adyacencia+", ");
            }
            System.out.println("})");
        }
    }
    
    
    public void recorridoEnAnchura(Vertice inicio){
        Queue<Vertice> queue = new LinkedList<>();
        inicio.setVisited(true);
        queue.add(inicio);
        
        Vertice actual = null;
        while(!queue.isEmpty()){
            actual = queue.poll();
            System.out.println(actual);
            
            for(Adyacencia a:actual.getAdyacencias()){
                if(!a.getVertice().isVisited()){
                    a.getVertice().setVisited(true);
                    queue.add(a.getVertice());
                }
            }
            
        }
        for(Vertice v:vertices){
            v.setVisited(false);
            
        }
    }
    
    public void recorridoEnProfundidad(Vertice inicio){
        Stack<Vertice> stack = new Stack<>();
        inicio.setVisited(true);
        stack.add(inicio);
        
        Vertice actual;
        while(!stack.isEmpty()){
            actual = stack.pop();
            System.out.println(actual);
            
            for(Adyacencia a:actual.getAdyacencias()){
                if(!a.getVertice().isVisited()){
                    a.getVertice().setVisited(true);
                    stack.add(a.getVertice());
                }
            }
        }
        
        for(Vertice v:vertices){
            v.setVisited(false);
            
        }
    }
    
    public void caminoMasCorto(Vertice inicio){
        Queue<Vertice> queue = new LinkedList<>();
        inicio.setVisited(true);
        inicio.setEtiqueta(new Etiqueta(null,0));
        queue.add(inicio);
        
        Vertice actual = null;
        while(!queue.isEmpty()){
            actual = queue.poll();
            //System.out.println(actual);
            
            for(Adyacencia a:actual.getAdyacencias()){
                Etiqueta nueva = new Etiqueta(actual,actual.getEtiqueta().getCosto()+a.getCosto());
                if(!a.getVertice().isVisited()){
                    a.getVertice().setVisited(true);
                    a.getVertice().setEtiqueta(nueva);
                    queue.add(a.getVertice());
                }
                if(nueva.getCosto()<a.getVertice().getEtiqueta().getCosto()){
                    a.getVertice().setEtiqueta(nueva);
                }
            }
            
        }
        for(Vertice v:vertices){
            v.setVisited(false);
            
        }
    }
   
    
    
    
}
