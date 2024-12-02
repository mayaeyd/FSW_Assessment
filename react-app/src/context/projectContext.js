import React, { createContext, useState, useEffect } from "react";
import axios from "axios";

export const ProjectsContext = createContext();

const ProjectsProvider = ({ children }) => {
    const [projects, setProjects] = useState([]);
  
    useEffect(() => {
      const fetchProjects = async () => {
        try {
          const response = await axios.get("http://127.0.0.1:8000/api/projects/get_projects");
          setProjects(response.data.projects);
        } catch (error) {
          console.error("Failed to fetch projects:", error);
        }
      };
  
      fetchProjects();
    }, []);
  
    return (
      <ProjectsContext.Provider value={{ projects }}>
        {children}
      </ProjectsContext.Provider>
    );
  };
  
  export default ProjectsProvider;